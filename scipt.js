document.getElementById('uploadForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const fileInput = document.getElementById('pestImage');
    const file = fileInput.files[0];
    
    if (file) {
        // Simulate image classification processing
        const resultDiv = document.getElementById('result');
        resultDiv.innerHTML = 'Processing...';
        resultDiv.style.color = '#007bff';

        setTimeout(() => {
            // Mock classification result
            resultDiv.innerHTML = 'This is a [Pest Name].';
            resultDiv.style.color = '#28a745';
        }, 2000); // Simulate a delay for processing
    } else {
        alert('Please upload an image.');
    }
});
