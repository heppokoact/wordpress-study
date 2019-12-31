FROM wordpress

RUN apt-get update && \
    pecl install xdebug