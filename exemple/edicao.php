<?php require_once ("../header.php"); ?>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 

  <script src="../dist/imagerJs.js"></script>
  <link href="../dist/imagerJs.css" rel="stylesheet">

  <style>
    .imager-edit-container .toolbar {
      position: absolute;
    }

    #imagers {
      display: flex;
      align-items: flex-start;
      flex-wrap: wrap;
    }

    .imager-test {
      display: inline-block;
      margin-top: 30px;
      margin-bottom: 100px;
    }

    .imager-test.custom-quality-visible {
      margin-bottom: 200px;
    }

    .image-container {
      min-width: 300px;
      margin-right: 30px;
      text-align: left;
    }
  </style>

<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading"><h3>ImagerJs - Standalone</h3></div>
      <div class="panel-body">
        <div class="form-group">
          <button class="btn btn-primary" onclick="addNew()">Add new ImagerJs</button>
        </div>
        <div class="form-group" id="imagers">

        </div>
      </div>
    </div>
  </div>

  <script>

    var pluginsConfig = {
      Rotate: {
        controlsCss: {
          width: '15px',
          height: '15px',
          background: 'white',
          border: '1px solid black'
        },
        controlsTouchCss: {
          width: '25px',
          height: '25px',
          background: 'white',
          border: '2px solid black'
        }
      },
      Resize: {
        controlsCss: {
          width: '15px',
          height: '15px',
          background: 'white',
          border: '1px solid black'
        },
        controlsTouchCss: {
          width: '25px',
          height: '25px',
          background: 'white',
          border: '2px solid black'
        }
      },
      Crop: {
        controlsCss: {
          width: '15px',
          height: '15px',
          background: 'white',
          border: '1px solid black'
        },
        controlsTouchCss: {
          width: '25px',
          height: '25px',
          background: 'white',
          border: '2px solid black'
        }
      },
      Toolbar: {
        toolbarSize: 85,
        toolbarSizeTouch: 43,
        tooltipEnabled: true,
        tooltipCss: {
          color: 'white',
          background: 'black'
        }
      },
      Delete: {
        fullRemove: true
      }
    };

    var options = {
      plugins: ['Rotate', 'Crop', 'Resize', 'Save', 'Toolbar', 'Delete', 'Undo'],
      editModeCss: {
      },
      pluginsConfig: pluginsConfig,
      quality: {
        sizes: [
          { label: 'Original', scale: 1, quality: 1, percentage: 100 },
          { label: 'Large', scale: 0.5, quality: 0.5, percentage: 50 },
          { label: 'Medium', scale: 0.2, quality: 0.2, percentage: 20 },
          { label: 'Small', scale: 0.05, quality: 0.05, percentage: 5 }
        ],
        allowCustomSetting: true
      },
      contentConfig: {
        saveImageData: function (imageId, imageData) {
          try {
            console.log('Save button clicked! ImageId:', imageId);
            console.log('ImageData argument here is the image encoded in base64 string. ' +
              'This function gets called anytime user clicks on `save` button. ' +
              'If one wants to disable edit after saving, check the `standalone-remote-upload.html` ' +
              'example file which shows how to upload image on the server ' +
              'and display it in place of ImagerJs after that.');
            localStorage.setItem('image_' + imageId, imageData);
          } catch (err) {
            console.error(err);
          }
        }
      }
    };

    var addNew = function () {
      var $imageContainer = $(
        '<div class="image-container">' +
        '  <img class="imager-test" ' +
        '       src="" ' +
        '       style="min-width: 300px; min-height: 200px; width: 300px;">' +
        '</div>');

      $('#imagers').append($imageContainer);
      var imager = new ImagerJs.Imager($imageContainer.find('img'), options);
      imager.startSelector();

      imager.on('editStart', function () {
        // fix image dimensions so that it could be properly placed on the grid
        imager.$imageElement.css({
          minWidth: 'auto',
          minHeight: 'auto'
        });
        var qualitySelector = new window.ImagerQualitySelector(imager, options.quality);

        var qualityContainer = $('<div class="imager-quality-standalone"></div>');
        qualityContainer.append(qualitySelector.getElement());

        imager.$editContainer.append(qualityContainer);

        qualitySelector.show();
        qualitySelector.update();
      });
    };
  </script>

<?php require_once("../footer.php"); ?>
