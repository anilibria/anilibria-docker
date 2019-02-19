FROM ubuntu:14.04

MAINTAINER Thierry Corbin <thierry.corbin@kauden.fr>

ENV DEBIAN_FRONTEND noninteractive

ADD asset/start.sh /bin/start.sh

RUN apt-get update && \
    apt-get -y upgrade && \
    apt-get -y install \
      cmake \
      g++ \
      libboost-date-time-dev \
      libboost-dev \
      libboost-filesystem-dev \
      libboost-program-options-dev \
      libboost-regex-dev \
      libboost-serialization-dev \
      libmysqlclient15-dev \
      make \
      subversion \
      zlib1g-dev \
      wget && \
    cd /tmp && \
    svn co http://xbt.googlecode.com/svn/trunk/xbt/misc xbt/misc && \
    svn co http://xbt.googlecode.com/svn/trunk/xbt/Tracker xbt/Tracker && \
    cd xbt/Tracker && \
    ./make.sh && \
    mkdir -p /opt/xbt_tracker/ && \
    cp xbt_tracker /opt/xbt_tracker/ && \
    cp xbt_tracker.conf.default /opt/xbt_tracker/xbt_tracker.conf && \
    cp xbt_tracker.sql /opt/xbt_tracker/ && \
    cd /opt/xbt_tracker/ && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    rm -rf /tmp/* && \
    chmod 755 /bin/start.sh

EXPOSE 2710

CMD /bin/start.sh