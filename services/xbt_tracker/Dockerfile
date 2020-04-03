FROM ubuntu:18.04

MAINTAINER asethomon <vlp.tiberium@gmail.com>

RUN apt-get update && apt-get install -y cmake default-libmysqlclient-dev g++ git libboost-dev make zlib1g-dev
RUN git clone https://github.com/OlafvdSpek/xbt

RUN cd xbt/Tracker && \
    cmake . && \
    make
COPY xbt_tracker.conf /xbt/bin/

RUN cd xbt/Tracker && adduser --disabled-login xbt && \
    cp xbt_tracker /xbt/bin && \
    chmod 700 /xbt/bin/xbt_tracker.conf && \
    chown -R xbt:xbt /xbt/bin
COPY xbt.bash /root/

RUN chmod 755 /root/xbt.bash
COPY rc.local /etc/
WORKDIR /xbt/bin
CMD /xbt/bin/xbt_tracker > /dev/null 2>/dev/null &