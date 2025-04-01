document.addEventListener("DOMContentLoaded", function() {
    
    /* Esta línea obtiene una referencia al botón de cálculo mediante su ID ('calcular-btn').
    para agregar un evento al botón y ejecutar la función de cálculo de ahorro*/
    const calcularBtn = document.getElementById("calcular-btn");
    const consumoInput = document.getElementById("consumo");
    const tipoEnergiaSelect = document.getElementById("tipo-energia");
    const resultadosSection = document.getElementById("resultados");
    const ahorroKwhSpan = document.getElementById("ahorro-kwh");
    const ahorroCo2Span = document.getElementById("ahorro-co2");
    const ahorroUsdSpan = document.getElementById("ahorro-usd");

    
    calcularBtn.addEventListener("click", function() {
        const consumo = parseFloat(consumoInput.value);
        const tipoEnergia = tipoEnergiaSelect.value;

        if (isNaN(consumo) || consumo <= 0) {
            alert("Por favor, ingrese un consumo válido mayor a cero.");
            return;
        }

        // Factores de ahorro dependiendo del tipo de energía seleccionada
        let factorAhorro;
        switch (tipoEnergia) {
            case "solar":
                factorAhorro = 0.2; // 20% de ahorro energético
                break;
            case "eolica":
                factorAhorro = 0.25; // 25% de ahorro energético
                break;
            case "hidrogeno":
                factorAhorro = 0.3; // 30% de ahorro energético
                break;
            default:
                factorAhorro = 0;
        }

        // Cálculos del ahorro
        const ahorroEnergetico = consumo * factorAhorro;
        const reduccionCo2 = ahorroEnergetico * 0.5; // Cada kWh de energía convencional genera 0.5 kg de CO₂
        const ahorroEconomico = ahorroEnergetico * 0.15; // 0.15 USD por kWh de ahorro

        // Mostrar los resultados
        ahorroKwhSpan.textContent = ahorroEnergetico.toFixed(2);
        ahorroCo2Span.textContent = reduccionCo2.toFixed(2);
        ahorroUsdSpan.textContent = ahorroEconomico.toFixed(2);

        resultadosSection.classList.remove("hidden");
    });
});
