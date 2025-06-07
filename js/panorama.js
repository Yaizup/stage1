document.getElementById("btngone").addEventListener('click',close);

function close(){
    console.log("oui");
    document.getElementById('tuto').style.display = 'none';
}

var isTurning = true;
var container = document.getElementById('container360');
var textureLoader = new THREE.TextureLoader();
var texture = textureLoader.load('./../ressource/images/Salle212-360.jpg');

var material = new THREE.MeshBasicMaterial({ map: texture, side: THREE.DoubleSide });
var geometry = new THREE.SphereGeometry(500, 60, 40);
var sphere = new THREE.Mesh(geometry, material);

var scene = new THREE.Scene();
scene.add(sphere);

var camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
camera.position.set(0, 0, 0.1);

var renderer = new THREE.WebGLRenderer();
renderer.setSize(container.clientWidth, container.clientHeight);
container.appendChild(renderer.domElement);

var isDragging = false;
var previousMouseX = 0;
var previousMouseY = 0;
var previousTouchX = 0;
var previousTouchY = 0;

container.addEventListener('mousedown', onMouseDown);
container.addEventListener('mouseup', onMouseUp);
container.addEventListener('mousemove', onMouseMove);
container.addEventListener('mouseenter', onMouseEnter);
container.addEventListener('mouseleave', onMouseExit);

container.addEventListener('touchstart', onTouchStart);
container.addEventListener('touchend', onTouchEnd);
container.addEventListener('touchmove', onTouchMove);

function onTouchStart(event) {
  var touch = event.touches[0];
  isDragging = true;
  previousTouchX = touch.clientX;
  previousTouchY = touch.clientY;
}

function onTouchEnd() {
  isDragging = false;
}

function onTouchMove(event) {
  if (isDragging) {
    var touch = event.touches[0];
    var deltaX = touch.clientX - previousTouchX;
    var deltaY = touch.clientY - previousTouchY;
    rotateImage(deltaX, deltaY);
    previousTouchX = touch.clientX;
    previousTouchY = touch.clientY;
  }
}

function onMouseDown(event) {
    isDragging = true;
    previousMouseX = event.clientX;
    previousMouseY = event.clientY;
}

function onMouseUp() {
    isDragging = false;
}

function onMouseEnter(){
    isTurning = false;
}

function onMouseExit(){
    isTurning = true;
    sphere.rotation.x=0;

}

function onMouseMove(event) {
if (isDragging) {
    var deltaX = event.clientX - previousMouseX;
    var deltaY = event.clientY - previousMouseY;
    rotateImage(deltaX, deltaY);
    previousMouseX = event.clientX;
    }
}

function rotateImage(deltaX, deltaY) {
    var rotationSpeedX = 0.002;
    var rotationSpeedY = 0.0001;
    sphere.rotation.y += deltaX * rotationSpeedX;
    sphere.rotation.x += deltaY * rotationSpeedY;
    sphere.rotation.x = Math.max(Math.min(sphere.rotation.x, Math.PI / 2), -Math.PI / 2);
}

function animate() {
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
    if (isTurning == true){
      sphere.rotation.y += 0.00075;
    }
    if (!isDragging) {
        sphere.rotation.y += 0.00075;
      }
}

animate();