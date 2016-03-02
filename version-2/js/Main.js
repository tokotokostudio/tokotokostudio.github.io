(function Main() {

  var _instance = {};

  var _canvas;
  var _ctx;
  var _mousePos = {
    x: 0,
    y: 0
  };

  _instance.init = function() {
    addListeners();
    buildCanvas();
    handleResize();
    draw();
  };

  function buildCanvas() {
    _canvas = document.getElementById('pattern');
    _canvas.style.position = 'absolute';
    _canvas.style.top = 260 + 'px';
    _canvas.style.left = 20 + 'px';

    _ctx = _canvas.getContext('2d');
  }

  function addListeners() {
    window.addEventListener('resize', handleResize);
    window.addEventListener('mousemove', handleMouseMove);

    // requestAnimationFrame(render);
  }

  function draw() {
    var LINE_HEIGHT = _canvas.height / 15;
    var START_X = 0.5 - _mousePos.x;
    var mouseYPerc = _mousePos.y / window.innerHeight;
    var xPos = 0.5;
    var yPos = 0;
    var strokeWidth = 1;
    var gapWidth = 16;// + (mouseYPerc * 8);
    var offsetStart = 0.5;
    var isOffset = false;

    _ctx.clearRect(0, 0, _canvas.width, _canvas.height);


    for (var j = 0, rowLength = 15; j < rowLength; j++) {
      _ctx.strokeStyle = 'rgb(0, 0, 0)';
      _ctx.lineWidth = strokeWidth;

      // determine if the current row is active
      var isRowActive = false;
      var topOfRow = 260 + (LINE_HEIGHT * j);
      var bottomOfRow = topOfRow + LINE_HEIGHT;

      if (_mousePos.y > topOfRow && _mousePos.y < bottomOfRow) {
        // _ctx.strokeStyle = 'rgb(55, 70, 200)';
        // isRowActive = true;
        xPos = START_X;
      }

      for (var i = 0, lineLength = 500; i < lineLength; i++) {
        _ctx.beginPath();
        _ctx.moveTo(xPos, yPos);
        _ctx.lineTo(xPos, yPos + LINE_HEIGHT);
        _ctx.closePath();
        _ctx.stroke();

        xPos += gapWidth;

        if (xPos - strokeWidth > _canvas.width) {
          break;
        }
      }

      isOffset = !isOffset;

      strokeWidth += .5;
      // gapWidth -= .5;
      xPos = (isOffset) ? (gapWidth / 2) + 0.5 : 0.5;
      yPos += LINE_HEIGHT;
      offsetStart = xPos;

    }

  }

  // function render(reqIndex) {
  //   if (_mousePos.prevX != _mousePos.x || _mousePos.prevY != _mousePos.y) {
  //     // only update the canvas when the mouse has moved.
  //     _mousePos.prevX = _mousePos.x;
  //     _mousePos.prevY = _mousePos.y;
  //     draw();
  //   }
  //
  //   requestAnimationFrame(render);
  // }

  function handleMouseMove(e) {
    // _mousePos.prevX = _mousePos.x;
    // _mousePos.prevY = _mousePos.y;
    // _mousePos.x = e.x;
    _mousePos.y = e.y;

    TweenLite.to(_mousePos, .6, {
      x: e.x,
      ease: Quad.easeOut,
      onUpdate: draw
    });
  }

  function handleResize(e) {
    _canvas.width = window.innerWidth - 40;
    _canvas.height = window.innerHeight - 295;

    draw();
  }

  window.Main = _instance;
})();

window.onload = Main.init;
