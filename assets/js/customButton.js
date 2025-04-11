class customButton extends HTMLElement {
    // static observedAttributes =  ["dkf", "sdjfasdf"];

    constructor() {
        super();
    }

    connectedCallback() {
        console.log("bereikt");
        const shadow = this.attachShadow({ mode: "open" });
        const button = document.createElement("button");
        const style = document.createElement("style");
        style.textContent = `
                button {
                    width: 200px;
                    height: 40px;
                    background-color: #D9D9D9;
                    color: #212121;
                    border-radius: 20px;
                }
            `;
            button.setAttribute("value", "Zoeken");
            button.setAttribute("type", "submit");
        shadow.append(style);

        shadow.append(button);
    }

    disconnectedCallback() {
        console.log("Custom element removed from page.");
    }

    adoptedCallback() {
        console.log("Custom element moved to new page.");
    }

    attributeChangedCallback(name, oldValue, newValue) {
        console.log(`Attribute ${name} has changed.`);
    }

}

customElements.define("custom-button", customButton);