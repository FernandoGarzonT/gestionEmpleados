import './bootstrap';


// JavaScript para manejar la cámara web
const startButton = document.getElementById('start-button');
const videoElement = document.getElementById('video-element');

// Evento de clic para iniciar la cámara
startButton.addEventListener('click', async () => {
    try {
        const stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
        videoElement.srcObject = stream;
       } catch (error) {
           console.error('Error al acceder a la cámara:', error);
       }
});
