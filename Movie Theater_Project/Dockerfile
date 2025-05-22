FROM php:7.4-apache

# mysqli এক্সটেনশন ইনস্টল
RUN docker-php-ext-install mysqli

# প্রজেক্ট কপি
COPY . .

# Apache config (optional)
EXPOSE 80
