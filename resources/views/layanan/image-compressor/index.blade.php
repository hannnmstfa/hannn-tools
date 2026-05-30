<x-guest-layout title="Image Compressor">
    <h1 class="text-4xl text-center font-bold">Image<span class="text-lime-600 dark:text-lime-400"> Compressor</span>
    </h1>
    <input type="file" accept="image/png, image/jpeg" name="test">
</x-guest-layout>
<script>
    // Set default FilePond options
    window.addEventListener('DOMContentLoaded', function () {
        FilePond.setOptions({
            server: {
                url: "{{ config('filepond.server.url') }}",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                }
            }
        });

        // Create the FilePond instance
        FilePond.create(document.querySelector('input[name="test"]'));
    });
</script>