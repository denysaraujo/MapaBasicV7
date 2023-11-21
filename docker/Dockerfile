FROM hacklab/mapasculturais:7.0.0-RC

COPY themes /var/www/src/themes
COPY plugins /var/www/src/plugins

COPY docker/common/lgpd-terms /var/www/config/lgpd-terms

WORKDIR /var/www/src
RUN pnpm install --recursive && pnpm run build 
WORKDIR /var/www


COPY docker/common/config.d /var/www/config/common.d
