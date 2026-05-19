import * as THREE from "three";
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
import { RoomEnvironment } from 'three/addons/environments/RoomEnvironment.js';

const model = document.getElementById("model");

let WIDTH = model.getBoundingClientRect().width;
let HEIGHT = model.getBoundingClientRect().height;

if (window.matchMedia("(width <= 589px)").matches) {
    WIDTH = 589;
    HEIGHT = 589;
}

const renderer = new THREE.WebGLRenderer({ antialias: true });
renderer.setSize(WIDTH, HEIGHT);
renderer.setClearColor(0xdddddd, 0);
model.appendChild(renderer.domElement);

const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(70, WIDTH / HEIGHT);

if (window.matchMedia("(width <= 450px)").matches) {
    camera.position.z = 8;
} else {
    camera.position.z = 6.5;
}

scene.add(camera);

const environment = new RoomEnvironment();
const pmremGenerator = new THREE.PMREMGenerator( renderer );
const envMap = pmremGenerator.fromScene( environment ).texture;
scene.environment = envMap;

function render() {
    requestAnimationFrame(render);
    renderer.render(scene, camera);
}

render();

// window.addEventListener("resize", () => {
//     camera.aspect = WIDTH / HEIGHT;

//     camera.updateProjectionMatrix();

//     renderer.setSize(WIDTH, HEIGHT);
// })

const loader = new GLTFLoader();

const gltf = await loader.loadAsync( 'blender/logo.glb' );

scene.add(gltf.scene);

console.log(scene)