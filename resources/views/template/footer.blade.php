  <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <p>&copy; {{ date('Y') }} BRI</p>
              </div>
          </div>
      </div>
  </footer>
  <style>
      footer {
          position: fixed;
          bottom: 0;
      }
  </style>

<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>

  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/app.js"></script>

  <!-- Need: Apexcharts -->
  <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
  <script src="assets/js/pages/dashboard.js"></script>

  <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
  <script>
  // Simple Datatable
  let table1 = document.querySelector('#table1');
  let dataTable = new simpleDatatables.DataTable(table1);
  </script>

<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- filepond validation -->
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

<!-- image editor -->
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

<!-- toastify -->
<script src="assets/vendors/toastify/toastify.js"></script>

<!-- filepond -->
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
// register desired plugins...
FilePond.registerPlugin(
    // validates the size of the file...
    FilePondPluginFileValidateSize,
    // validates the file type...
    FilePondPluginFileValidateType,

    // calculates & dds cropping info based on the input image dimensions and the set crop ratio...
    FilePondPluginImageCrop,
    // preview the image file type...
    FilePondPluginImagePreview,
    // filter the image file
    FilePondPluginImageFilter,
    // corrects mobile image orientation...
    FilePondPluginImageExifOrientation,
    // calculates & adds resize information...
    FilePondPluginImageResize,
);

// Filepond: Basic
FilePond.create( document.querySelector('.basic-filepond'), { 
    allowImagePreview: false,
    allowMultiple: false,
    allowFileEncode: false,
    required: false
});

// Filepond: Multiple Files
FilePond.create( document.querySelector('.multiple-files-filepond'), { 
    allowImagePreview: false,
    allowMultiple: true,
    allowFileEncode: false,
    required: false
});

// Filepond: With Validation
FilePond.create( document.querySelector('.with-validation-filepond'), { 
    allowImagePreview: false,
    allowMultiple: true,
    allowFileEncode: false,
    required: true,
    acceptedFileTypes: ['image/png'],
    fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
    })
});

// Filepond: ImgBB with server property
FilePond.create( document.querySelector('.imgbb-filepond'), { 
    allowImagePreview: false, 
    server: {
        process: (fieldName, file, metadata, load, error, progress, abort) => {
            // We ignore the metadata property and only send the file

            const formData = new FormData();
            formData.append(fieldName, file, file.name);

            const request = new XMLHttpRequest();
            // you can change it by your client api key
            request.open('POST', 'https://api.imgbb.com/1/upload?key=762894e2014f83c023b233b2f10395e2');

            request.upload.onprogress = (e) => {
                progress(e.lengthComputable, e.loaded, e.total);
            };

            request.onload = function() {
                if (request.status >= 200 && request.status < 300) {
                    load(request.responseText);
                }
                else {
                    error('oh no');
                }
            };

            request.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if(this.status == 200) {
                        let response = JSON.parse(this.responseText);
                        
                        Toastify({
                            text: "Berhasl Ditambahkan",
                            duration: 3000,
                            close:true,
                            gravity:"bottom",
                            position: "right",
                            backgroundColor: "#4fbe87",
                        }).showToast();
            
                        console.log(response);
                    } else {
                        Toastify({
                            text: "Failed uploading to imgbb! see console f12",
                            duration: 3000,
                            close:true,
                            gravity:"bottom",
                            position: "right",
                            backgroundColor: "#ff0000",
                        }).showToast();   

                        console.log("Error", this.statusText);
                    }
                }
            };

            request.send(formData);
        }
    }
});

// Filepond: Image Preview
FilePond.create( document.querySelector('.image-preview-filepond'), { 
    allowImagePreview: true, 
    allowImageFilter: false,
    allowImageExifOrientation: false,
    allowImageCrop: false,
    acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
    fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
    })
});

// Filepond: Image Crop
FilePond.create( document.querySelector('.image-crop-filepond'), { 
    allowImagePreview: true, 
    allowImageFilter: false,
    allowImageExifOrientation: false,
    allowImageCrop: true,
    acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
    fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
    })
});

    // Filepond: Image Exif Orientation
FilePond.create( document.querySelector('.image-exif-filepond'), { 
    allowImagePreview: true, 
    allowImageFilter: false,
    allowImageExifOrientation: true,
    allowImageCrop: false,
    acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
    fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
    })
});

// Filepond: Image Filter
FilePond.create( document.querySelector('.image-filter-filepond'), {
    allowImagePreview: true, 
    allowImageFilter: true,
    allowImageExifOrientation: false,
    allowImageCrop: false,
    imageFilterColorMatrix: [
        0.299, 0.587, 0.114, 0, 0,
        0.299, 0.587, 0.114, 0, 0,
        0.299, 0.587, 0.114, 0, 0,
        0.000, 0.000, 0.000, 1, 0
    ],
    acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
    fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
    })
});

// Filepond: Image Resize
FilePond.create( document.querySelector('.image-resize-filepond'), {
    allowImagePreview: true, 
    allowImageFilter: false,
    allowImageExifOrientation: false,
    allowImageCrop: false,
    allowImageResize: true,
    imageResizeTargetWidth: 200,
    imageResizeTargetHeight: 200,
    imageResizeMode: 'cover',
    imageResizeUpscale: true,
    acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
    fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
        // Do custom type detection here and return with promise
        resolve(type);
    })
});
</script>

<script src="assets/js/main.js"></script>
</body>

</html>
