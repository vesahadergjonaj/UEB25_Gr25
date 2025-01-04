/*TEK OFERTAT*/

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


                    /*   TEK USHQIMI    */ 

$(document).ready(function () {
    const foodData = {
        fruits: {
            title: "Frutat",
            description: "Frutat janë burime të pasura me vitamina dhe antioksidantë.",
            items: ["Mollët", "Portokalli", "Bananja", "Boronica"],
        },
        vegetables: {
            title: "Perimet",
            description: "Perimet ndihmojnë në uljen e kolesterolit dhe përmirësimin e tretjes.",
            items: ["Karrotat", "Brokoli", "Spinaqi", "Domatet"],
        },
        proteins: {
            title: "Proteinët",
            description: "Proteinët ndihmojnë në ndërtimin e muskujve dhe rigjenerimin e indeve.",
            items: ["Pula", "Vezët", "Thjerrëzat", "Peshku"],
        },
        grains: {
            title: "Drithërat",
            description: "Drithërat janë burim i fibrave dhe energjisë së qëndrueshme.",
            items: ["Orizi i Bardhë", "Quinoa", "Tërshëra", "Misri"],
        },
    };

    
    // Shfaq informacionin sipas kategorisë
    $(".food-btn").click(function () {
        const category = $(this).data("category");
        const data = foodData[category];

        $("#category-title").text(data.title);
        $("#category-description").text(data.description);
        $("#food-list").empty(); // Pastron elementët ekzistues

        data.items.forEach((item) => {
            $("#food-list").append(`<li>${item}</li>`);
        });

        $("#food-info").fadeIn(400); // Efekt Fade për të shfaqur informacionin
    });

    // Fshij informacionin
    $("#clear-info").click(function () {
        $("#food-info").fadeOut(400, function () {
            $("#category-title, #category-description, #food-list").empty();
        });
    });

    // Shfaq të gjitha kategoritë njëkohësisht
    $("#show-all").click(function () {
        $("#food-info").fadeIn(400);
        $("#category-title").text("Të Gjitha Kategoritë");
        $("#category-description").text("Këtu janë të listuara të gjitha ushqimet e rekomanduara.");
        $("#food-list").empty();

        for (const key in foodData) {
            foodData[key].items.forEach((item) => {
                $("#food-list").append(`<li>${item} (${foodData[key].title})</li>`);
            });
        }
    });
});
