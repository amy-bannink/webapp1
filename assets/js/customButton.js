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
                    height: 36px;
                    background-color: #D9D9D9;
                    color: #212121;
                    border-radius: 10px;
                    margin-top: 50px;
                    opacity: 0.4;
                }
            `;
            button.setAttribute("value", "Zoeken");
            button.setAttribute("type", "submit");
        shadow.append(style);

        shadow.append(button);
    }

}

customElements.define("custom-button", customButton);