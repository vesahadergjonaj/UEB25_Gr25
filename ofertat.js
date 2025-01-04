// healify.js

// Shfaq një vërejtje
document.getElementById("warning-btn").addEventListener("click", () => {
    alert("Mos e humbni ofertën tuaj speciale! Veproni tani!");
});

// Variabla dhe tipe të dhënash
const clinicName = "Healify Clinic";
const offerName = "Paketë Familjare";
const offerDiscount = 25;
const offerActive = true;

document.getElementById("variable-output").textContent = `
    Klinika: ${clinicName}, Oferta: ${offerName}, Zbritje: ${offerDiscount}%, Valide: ${offerActive}
`;

// Vargje dhe objekte
const specialOffers = ["Kontroll Mjekësor", "Analiza Gjakut", "Paketë Familjare"];
let offerList = "";
specialOffers.forEach(offer => {
    offerList += `<li>${offer}</li>`;
});
document.getElementById("array-output").innerHTML = offerList;

// Funksione dhe qasja në rezultate
document.getElementById("submit-btn").addEventListener("click", () => {
    const name = document.getElementById("name").value;
    const service = document.getElementById("service").value;
    const age = document.getElementById("age").value;

    document.getElementById("results-output").textContent = `
        Pershendetje ${name}, mosha juaj është ${age}. Ju keni zgjedhur shërbimin: ${service}.
    `;
});
