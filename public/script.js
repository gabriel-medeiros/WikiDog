const fetchDogs = async () => {
    try {
        const response = await fetch('https://wikidog-api.herokuapp.com/dogs', {
            method: 'GET',
        });
        const dogs = await response.json();

        dogs.forEach(dog => {
            console.log(dog);
        });
    } catch (error) {
        console.log('Erro de conexão', error);
    }
}
// Obedient,Companionable,Intelligent,Docile,Loyal,Protective,Playful,Wild,Friendly,Energetic
// fetchDogs().then(r => console.log(r));
