# Apache এবং PHP 7.4 বেস ইমেজ
FROM php:7.4-apache

# mysqli এক্সটেনশন ইনস্টল
RUN docker-php-ext-install mysqli

# Apache ServerName Warning দূর করার জন্য
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Apache এর mod_rewrite চালু (যদি .htaccess দরকার হয়)
RUN a2enmod rewrite

# কন্টেইনারের ডিরেক্টরি ঠিক করা
WORKDIR /var/www/html

# হোস্টের সব ফাইল কপি করা (docker-compose এর volumes এটি ওভাররাইড করবে)
COPY . /var/www/html
