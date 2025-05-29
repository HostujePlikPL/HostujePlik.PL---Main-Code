#!/bin/bash

# Pobierz uptime w sekundach (pierwsza liczba z /proc/uptime)
uptime_seconds=$(awk '{print int($1)}' /proc/uptime)

# Aktualna data i godzina w formacie ISO (np. 2025-05-27T13:42:00)
reported_at=$(date -Iseconds)

# Adres API (ZMIEN NA SWOJ)
API_URL="https://hostujeplik.pl/api/server-uptime"

# Wyślij dane POST jako JSON
curl -X POST "$API_URL" \
     -H "Content-Type: application/json" \
     -d "{\"uptime_seconds\": $uptime_seconds, \"reported_at\": \"$reported_at\"}"
