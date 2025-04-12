console.log("customButton.js loaded");

class customButton extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        const button = document.createElement("button");
        button.textContent = this.textContent || "Zoek";
        button.type = "submit";
        button.style.cssText = `
            width: 180px;
            height: 36px;
            background-color: #D9D9D9;
            color: #212121;
            border-radius: 10px;
            margin-top: 50px;
            opacity: 0.4;
            border: none;
            cursor: pointer;
        `;

        // Voeg een click event toe aan de button
        button.addEventListener('click', (e) => {
            console.log("Button clicked");  // Debugging log
            e.preventDefault(); // Voorkom de standaard actie
            const form = this.closest('form');
            if (form) {
                console.log("Submitting form");  // Debugging log
                form.submit();
            }
        });

        this.innerHTML = ""; // Maak de innerHTML leeg
        this.appendChild(button); // Voeg de button toe
    }
}

customElements.define("custom-button", customButton);
