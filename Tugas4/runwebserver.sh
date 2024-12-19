# File: runwebserver.sh

#!/bin/bash

# Hapus kontainer yang ada jika sudah ada
docker rm -f web-server-cv

# Jalankan kontainer nginx
docker run -d -p 80:80 --name web-server-cv nginx:stable-alpine

# Tunggu beberapa saat agar kontainer sepenuhnya berjalan sebelum menyalin file
sleep 5

# Salin file HTML ke dalam kontainer
docker cp /home/maou/cloud2023/containers/compose/images/Tugas4/html/. web-server-cv:/usr/share/nginx/html
