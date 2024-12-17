#!/bin/sh

# Install curl dan jq untuk sistem berbasis Ubuntu/Debian
sudo apt update && sudo apt install -y curl jq

URL=https://official-joke-api.appspot.com/jokes/random
LOKASI=/data

# Tentukan DELAY (interval waktu dalam detik)
DELAY=10

echo "Skrip ini akan dijalankan setiap $DELAY detik."

while true;
do
    date=$(date '+%Y-%m-%d_%H:%M:%S')
    echo "Processing at $date"
    fname="output_$date.txt"
    
    # Mengambil lelucon acak dan menampilkannya
    curl -s $URL | jq -r '.setup, .punchline'
    
    # Menunggu sesuai dengan DELAY sebelum mengulang
    sleep $DELAY
done
