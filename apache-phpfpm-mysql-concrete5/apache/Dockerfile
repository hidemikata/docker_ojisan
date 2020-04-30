FROM httpd:2.4
RUN ["mkdir", "-p", "/var/www/html"]
RUN ["chmod", "777", "/var/www/html"]
RUN sed -e 's/\/usr\/local\/apache2\/htdocs/\/var\/www\/html/g' /usr/local/apache2/conf/httpd.conf > tmp && cp tmp /usr/local/apache2/conf/httpd.conf &&\
sed -e 's/#LoadModule proxy_module modules\/mod_proxy.so/LoadModule proxy_module modules\/mod_proxy.so/g' /usr/local/apache2/conf/httpd.conf > tmp && cp tmp /usr/local/apache2/conf/httpd.conf && \
sed -e 's/#LoadModule proxy_fcgi_module modules\/mod_proxy_fcgi.so/LoadModule proxy_fcgi_module modules\/mod_proxy_fcgi.so/g' /usr/local/apache2/conf/httpd.conf > tmp && cp tmp /usr/local/apache2/conf/httpd.conf && \
sed -e 's/#Include conf\/extra\/httpd-default.conf/Include conf\/extra\/httpd-default.conf/g' /usr/local/apache2/conf/httpd.conf > tmp && cp tmp /usr/local/apache2/conf/httpd.conf && \
sed -e 's/Timeout 60/Timeout 600/g' /usr/local/apache2/conf/extra/httpd-default.conf > tmp && cp tmp /usr/local/apache2/conf/extra/httpd-default.conf

RUN echo '<FilesMatch ".*\.php$">' >> /usr/local/apache2/conf/httpd.conf &&\
echo '  SetHandler "proxy:fcgi://web-phpfpm:9000"' >> /usr/local/apache2/conf/httpd.conf &&\
echo '</FilesMatch>' >> /usr/local/apache2/conf/httpd.conf
COPY concrete5-8.5.2/ /var/www/html/

RUN ["rm", "-rf", "/var/www/html/application"]
RUN ["rm", "-rf", "/var/www/html/packages"]
