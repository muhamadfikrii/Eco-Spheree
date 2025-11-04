# TODO: Refactor Dashboard Code

## Tasks
- [x] Move inline CSS from `resources/views/dashboard.blade.php` to `resources/css/app.css`
- [x] Remove inline `<style>` and `<script>` tags from `resources/views/dashboard.blade.php`
- [x] Update `resources/js/dashboard.js` to include missing functions: notify, setCurrentLocation, improved submitReport with validation
- [x] Change `x-data="dashboard()"` to `x-data="dashboard"` in `resources/views/dashboard.blade.php`
- [x] Add missing `photo` property to `reportForm` in `resources/js/dashboard.js`
- [x] Ensure consistent data between files

## Followup Steps
- [x] Test the modal by opening it, filling the form, and submitting to ensure it works
- [x] Run the app to verify no errors
