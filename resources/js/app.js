import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('eventForm');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const eventName = document.getElementById('eventName').value;
        const eventDate = document.getElementById('eventDate').value;

        fetch('/api/events', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ name: eventName, date: eventDate }),
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
            addEventToList(data); // Actualizăm UI-ul cu noul eveniment
            form.reset(); // Resetăm formularul după trimitere
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    });
});

function addEventToList(event) {
    const eventsList = document.querySelector('.events');
    const eventElement = document.createElement('div');
    eventElement.classList.add('event');
    eventElement.innerHTML = `<h5>${event.name}</h5><p>${event.date}</p>`;
    eventsList.appendChild(eventElement);
}
