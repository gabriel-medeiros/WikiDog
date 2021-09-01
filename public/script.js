let resultados = document.getElementById('resultados')

const fetchDogs = async () => {

    const search = document.getElementById('search').value
    let select = document.getElementById('life_span')
    const life_span = select.options[select.selectedIndex].value
    let checkedValues = ""
    let checkboxes = document.getElementsByClassName('form-check-input')
    for (let i = 0; checkboxes[i]; ++i) {
        if (checkboxes[i].checked) {
            checkedValues += checkboxes[i].value + ','
        }
    }

    let options = checkedValues.slice(0, -1)

    try {
        const response = await fetch(`https://wikidog-api.herokuapp.com/dogs/?search=${search}&life_sapan=${life_span}&options=${options}`, {
            method: 'GET',
        });
        const dogs = await response.json();

        resultados.innerHTML = ""

        dogs.forEach(dog => {
            resultados.insertAdjacentHTML("beforeend", createCardDog(dog.image, dog.name))
        });
    } catch (error) {
        console.log('Erro de conexão', error);
    }
}

fetchDogs()

const createCardDog = (srcImage, nomeRaca) => {
    return `
        <div class="col-lg-6">
            <div class="position-relative mb-5">
                 <img class="img-fluid rounded-3 mb-3" src="${srcImage}" style="height: 50vh;"/>
                 <br/>
                 <a class="h3 fw-bolder text-decoration-none link-dark stretched-link"
                 href="{{ url('detalhes') }}">${nomeRaca}</a>
            </div>
        </div>
    `;
}


/*

 <div class="col-lg-6">
     <div class="position-relative mb-5">
         <img class="img-fluid rounded-3 mb-3" src="" style="height: 50vh;"/>
         <br/>
         <a class="h3 fw-bolder text-decoration-none link-dark stretched-link"
         href="{{ url('detalhes') }}">Labrador</a>
     </div>
 </div>

 */
