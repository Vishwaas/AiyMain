module.exports = function(app) {
  var express = require('express');
  var aiyRouter = express.Router();

  aiyRouter.get('/', function(req, res) {
    res.send({
      'aiy': []
    });
  });

  aiyRouter.get('/photolist', function(req, res) {
    res.send(["AiyGallery0009.jpg","AiyGallery0073.jpg","AiyGallery0037.jpg","AiyGallery0017.jpg","AiyGallery0080.jpg",
              "AiyGallery0016.jpg","AiyGallery0056.jpg","AiyGallery0076.jpg","AiyGallery0042.jpg","AiyGallery0039.jpg",
              "AiyGallery0046.jpg","AiyGallery0078.jpg","AiyGallery0023.jpg","AiyGallery0085.jpg","AiyGallery0064.jpg",
              "AiyGallery0086.jpg","AiyGallery0079.jpg","AiyGallery0033.jpg","AiyGallery0030.jpg","AiyGallery0070.jpg",
              "AiyGallery0069.jpg","AiyGallery0051.jpg","AiyGallery0081.jpg","AiyGallery0015.jpg","AiyGallery0077.jpg",
              "AiyGallery0038.jpg","AiyGallery0072.jpg","AiyGallery0036.jpg","AiyGallery0031.jpg","AiyGallery0006.jpg",
              "AiyGallery0013.jpg","AiyGallery0052.jpg","AiyGallery0065.jpg","AiyGallery0045.jpg","AiyGallery0008.jpg",
              "AiyGallery0066.jpg","AiyGallery0020.jpg","AiyGallery0090.jpg","AiyGallery0089.jpg","AiyGallery0032.jpg",
              "AiyGallery0028.jpg","AiyGallery0053.jpg","AiyGallery0003.jpg","AiyGallery0027.jpg","AiyGallery0014.jpg",
              "AiyGallery0011.jpg","AiyGallery0035.jpg","AiyGallery0075.jpg","AiyGallery0062.jpg","AiyGallery0004.JPG",
              "AiyGallery0021.jpg","AiyGallery0010.jpg","AiyGallery0024.jpg","AiyGallery0002.JPG","AiyGallery0026.jpg",
              "AiyGallery0061.jpg","AiyGallery0040.jpg","AiyGallery0043.jpg","AiyGallery0057.jpg","AiyGallery0088.jpg",
              "AiyGallery0060.jpg","AiyGallery0012.jpg","AiyGallery0082.jpg","AiyGallery0047.jpg","AiyGallery0074.jpg",
              "AiyGallery0034.jpg","AiyGallery0091.jpg","AiyGallery0059.jpg","AiyGallery0049.jpg","AiyGallery0005.JPG",
              "AiyGallery0029.jpg","AiyGallery0007.jpg","AiyGallery0083.jpg","AiyGallery0048.jpg","AiyGallery0044.jpg",
              "AiyGallery0055.jpg","AiyGallery0063.jpg","AiyGallery0019.jpg","AiyGallery0084.jpg","AiyGallery0058.jpg",
              "AiyGallery0087.jpg","AiyGallery0071.jpg","AiyGallery0025.jpg","AiyGallery0041.jpg","AiyGallery0054.jpg",
              "AiyGallery0068.jpg","AiyGallery0001.jpg","AiyGallery0067.jpg","AiyGallery0018.jpg","AiyGallery0050.jpg",
              "AiyGallery0022.jpg","AiyGallery0092.JPG"]);    
  });

  aiyRouter.post('/', function(req, res) {
    res.status(201).end();
  });

  aiyRouter.get('/:id', function(req, res) {
    res.send({
      'aiy': {
        id: req.params.id
      }
    });
  });

  aiyRouter.put('/:id', function(req, res) {
    res.send({
      'aiy': {
        id: req.params.id
      }
    });
  });

  aiyRouter.delete('/:id', function(req, res) {
    res.status(204).end();
  });

  app.use('/api/aiy', aiyRouter);
};
