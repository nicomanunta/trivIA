# js-trivIA 🎲

**js-trivIA** è una web app ispirata al gioco da tavolo **Trivial Pursuit**, che permette agli utenti di mettere alla prova la propria conoscenza scegliendo tra **sei categorie di domande**:

-   🗺️ Geografia
-   🎭 Spettacolo
-   📜 Storia
-   📚 Letteratura
-   🔬 Scienze
-   🎨 Hobby

Una volta selezionata la categoria, verrà generata una domanda casuale con **quattro opzioni di risposta**, di cui solo una corretta. Grazie all'integrazione con **ChatGPT API**, la web app fornisce domande sempre nuove e dinamiche.

## 🚀 Funzionalità

-   **Selezione della categoria**: ogni categoria ha il proprio colore distintivo.
-   **Generazione automatica delle domande**: le domande vengono ottenute tramite una chiamata API a **ChatGPT**.
-   **Interazione con l'utente**:
    -   L'utente seleziona una risposta tra le quattro disponibili.
    -   Avvio di un'animazione che indica l'elaborazione della risposta.
    -   Colorazione della risposta:
        -   ✅ **Verde** se corretta.
        -   ❌ **Rosso** se errata.
    -   Dopo pochi secondi, l'utente viene reindirizzato alla schermata iniziale per una nuova partita.
-   **Esperienza dinamica e coinvolgente**, grazie a timer e animazioni che rendono il gioco fluido e reattivo.
-   **Responsive Design**: ottimizzato per desktop e dispositivi mobili.

## 🛠️ Tecnologie Utilizzate

-   **Laravel**: per la gestione delle chiamate API e la logica backend.
-   **HTML**: per la struttura della web app.
-   **CSS/Bootstrap**: per il design e la responsività dell'interfaccia utente.
-   **JavaScript**: per le animazioni, la gestione delle risposte e i timer.
-   **ChatGPT API**: per la generazione dinamica delle domande.

🎉 Gioca a **js-trivIA** e metti alla prova le tue conoscenze in un'esperienza divertente e interattiva!
