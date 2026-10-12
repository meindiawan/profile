@echo off
REM Installer sekali klik (Windows / XAMPP). Butuh PHP + Composer di PATH.
setlocal
set NAME=eka-portfolio
cd /d "%~dp0"
if not exist "..\%NAME%" (
  call composer create-project laravel/laravel "..\%NAME%" || goto :err
)
xcopy /E /Y /I "routes" "..\%NAME%\routes\" >nul
xcopy /E /Y /I "resources" "..\%NAME%\resources\" >nul
xcopy /E /Y /I "public" "..\%NAME%\public\" >nul
cd /d "..\%NAME%"
powershell -NoProfile -Command "(Get-Content .env) -replace 'SESSION_DRIVER=database','SESSION_DRIVER=file' | Set-Content .env"
php artisan view:clear
echo.
echo Selesai. Membuka http://127.0.0.1:8000 ...
start "" http://127.0.0.1:8000
php artisan serve
goto :eof
:err
echo Gagal membuat project. Pastikan Composer terpasang dan ada koneksi internet.
pause
