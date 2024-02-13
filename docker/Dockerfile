FROM hacklab/mapasculturais:7.3.9

COPY themes /var/www/src/themes
COPY plugins /var/www/src/plugins

WORKDIR /var/www/src
RUN pnpm install --recursive && pnpm run build

COPY docker/common/config /var/www/config/common.d
COPY docker/production/config /var/www/config
COPY docker/modules/2.IntroducaoMapa /var/www/src/modules/FAQ/questions/pt_BR/2.IntroducaoMapa/1.mapa-cultural

COPY docker/common/php-ini.d /usr/local/etc/php/conf.d

WORKDIR /var/www
