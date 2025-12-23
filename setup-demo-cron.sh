#!/bin/bash

# Setup Demo Cron Job Script
# This script sets up the nightly database reset for demo applications

echo "Setting up demo cron job..."

# Get the current directory (Laravel project root)
PROJECT_ROOT=$(pwd)

# Create the cron job entry
CRON_JOB="0 1 * * * cd $PROJECT_ROOT && php artisan demo:reset --force >> storage/logs/demo-reset.log 2>&1"

# Check if cron job already exists
if crontab -l 2>/dev/null | grep -q "demo:reset"; then
    echo "Demo cron job already exists. Updating..."
    # Remove existing demo cron job
    crontab -l 2>/dev/null | grep -v "demo:reset" | crontab -
fi

# Add the new cron job
(crontab -l 2>/dev/null; echo "$CRON_JOB") | crontab -

echo "Cron job added successfully!"
echo "The demo database will be reset every night at 1:00 AM"
echo ""
echo "Current cron jobs:"
crontab -l

echo ""
echo "To manually reset the demo database, run:"
echo "php artisan demo:reset"
echo ""
echo "To remove the cron job, run:"
echo "crontab -e"
echo "and delete the line containing 'demo:reset'"