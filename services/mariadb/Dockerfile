FROM mariadb:10.3

RUN apt-get update && apt-get install -y cmake default-libmysqlclient-dev g++ git libboost-dev make zlib1g-dev libsystemd-dev
RUN git clone https://github.com/OlafvdSpek/xbt

RUN cd xbt/Tracker && \
        cmake . && \
        make
COPY xbt_tracker/xbt_tracker.conf /xbt/bin/

RUN cd xbt/Tracker && adduser --disabled-login xbt && \
        cp xbt_tracker /xbt/bin && \
        chmod 700 /xbt/bin/xbt_tracker.conf && \
        chown -R xbt:xbt /xbt/bin
COPY xbt_tracker/xbt.bash /root/

RUN chmod 755 /root/xbt.bash
COPY xbt_tracker/rc.local /etc/
RUN /root/xbt.bash &