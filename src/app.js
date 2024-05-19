document.getElementById('startButton').addEventListener('click', async () => {
    try {
        const stream = await navigator.mediaDevices.getDisplayMedia({
            video: {
                cursor: "always"
            },
            audio: false
        });

        const videoElement = document.getElementById('screenVideo');
        videoElement.srcObject = stream;

        stream.getVideoTracks()[0].addEventListener('ended', () => {
            alert('Демонстрацію екрана завершено');
        });
    } catch (err) {
        console.error('Помилка: ' + err);
    }
});
