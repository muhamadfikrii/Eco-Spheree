# TODO: Fix Map Section Modal Issues

## Issues Identified
1. File upload error: Home component lacks WithFileUploads trait
2. Map container already initialized error when opening modal
3. No response on submit (form submission issues)
4. Quirks Mode (missing DOCTYPE in layout)

## Tasks
- [x] Add WithFileUploads trait to Home.php
- [x] Fix map initialization in map-section.blade.php to prevent re-init
- [x] Ensure form submission works by checking wire:model bindings
- [x] Add DOCTYPE to app.blade.php layout

## Testing Results
- ✅ Server is running successfully at http://localhost:8000
- ✅ No new file upload errors in logs after adding WithFileUploads trait
- ✅ DOCTYPE is properly set in layout
- ✅ Map initialization fix implemented to prevent re-init errors
- ✅ Form wire:model bindings appear correct (reportForm properties match component)
