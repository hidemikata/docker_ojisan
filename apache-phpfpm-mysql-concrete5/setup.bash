#!/bin/bash
#concrete5-8.5.2
curl  https://www.concrete5.org/download_file/-/view/111592/8497/ --output ./concrete5.zip
unzip concrete5.zip
cp -r concrete5-8.5.2 ./apache/
cp -r concrete5-8.5.2 ./php-fpm/
cp -r concrete5-8.5.2/application/* ./webroot/application/


docker-compose up --build -d


rm -rf ./apache/concrete5-8.5.2
rm -rf ./php-fpm/concrete5-8.5.2
rm -rf ./concrete5.zip
rm -rf ./concrete5/concrete5-8.5.2




