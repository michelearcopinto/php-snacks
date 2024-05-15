# PHP Snacks

## Descrizione del Progetto
Il progetto `php-snacks` è una collezione di funzioni PHP che dimostrano vari compiti comuni nella programmazione PHP, come la manipolazione di stringhe, calcoli matematici, e manipolazione di array. Questo progetto è stato creato per mostrare l'uso di PHP in scenari reali, fornendo esempi chiari e commentati su come eseguire operazioni specifiche.

## Funzioni Incluse

### 1. `calculate_speed`
- **Descrizione**: Calcola la velocità in miglia orarie (mph) data la distanza in chilometri (o metri) e il tempo in minuti (o secondi).
- **Uso**: `calculate_speed('573km', '39min')`
- **Esempio di output**: `83mph`

### 2. `cats`
- **Descrizione**: Calcola il numero di "passi" che un gatto farebbe tra due punti dati, usando una formula semplice basata su una divisione arbitraria.
- **Uso**: `var_dump(cats(2, 2))`
- **Esempio di output**: `int(0)`

### 3. `wordsToMarks`
- **Descrizione**: Converte una stringa in un punteggio basato sulla posizione delle lettere nell'alfabeto, sommando i valori numerici associati a ogni lettera.
- **Uso**: `var_dump(wordsToMarks('attitude'))`
- **Esempio di output**: `100`

### 4. `toCamelCase`
- **Descrizione**: Converte una stringa da formato snake_case o kebab-case a camelCase, modificando la prima lettera di ogni parola (esclusa la prima) in maiuscolo e unendole senza spazi.
- **Uso**: `echo toCamelCase('The_stealth-warrior')`
- **Esempio di output**: `TheStealthWarrior`

### 5. `kebabize`
- **Descrizione**: Converte una stringa CamelCase in kebab-case, rimuovendo i numeri e inserendo trattini tra le parole iniziate con lettere maiuscole.
- **Uso**: `var_dump(kebabize('Camel'))`
- **Esempio di output**: `camel`

### 6. `maxRot`
- **Descrizione**: Trova il massimo valore ottenuto attraverso rotazioni successive del numero dato, dove in ogni passo una cifra viene spostata dalla sua posizione corrente alla fine della sequenza numerica.
- **Uso**: `var_dump(maxRot(38458215))`
- **Esempio di output**: `85821534`

## Come Iniziare
Per utilizzare questo progetto, clona il repository e includi i file PHP nel tuo ambiente di sviluppo. Ogni funzione può essere testata individualmente passando i parametri appropriati come mostrato negli esempi di uso.

## Contribuire
Se desideri contribuire al progetto con nuove funzioni o miglioramenti, si prega di inviare una pull request con le tue modifiche. Tutti i contributi sono benvenuti.

## Licenza
Questo progetto è rilasciato sotto la Licenza MIT.
