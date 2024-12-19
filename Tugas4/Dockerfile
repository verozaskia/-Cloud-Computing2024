# Gunakan image Nginx sebagai base image
FROM nginx:stable-alpine

# Salin semua file dari direktori 'html' ke dalam direktori Nginx di dalam kontainer
COPY ./html /usr/share/nginx/html

# Ekspose port 80 untuk akses HTTP
EXPOSE 80
