const selectDepartamentos = document.getElementById("selectDepartamentos")
const selectMunicipios = document.getElementById("selectMunicipios")

const departamentos = [
    {id: 1, nombre: 'Antioquia'},
    {id: 2, nombre: 'Cundinamarca'},
    {id: 3, nombre: 'Valle del Cauca'},
    {id: 4, nombre: 'Atlantico'},
    {id: 5, nombre: 'Santander'}
]

const municipios = [
    {id: 1, id_departamentos: 1, nombre: 'Medellin'},
    {id: 2, id_departamentos: 1, nombre: 'Envigado'},
    {id: 3, id_departamentos: 2, nombre: 'Bogotá'},
    {id: 4, id_departamentos: 2, nombre: 'Soacha'},
    {id: 5, id_departamentos: 3, nombre: 'Cali'},
    {id: 6, id_departamentos: 3, nombre: 'Palmira'},
    {id: 7, id_departamentos: 4, nombre: 'Barranquilla'},
    {id: 8, id_departamentos: 4, nombre: 'Soledad'},
    {id: 9, id_departamentos: 5, nombre: 'Bucaramanga'},
    {id: 10, id_departamentos: 5, nombre: 'Floridablanca'}
];


departamentos.forEach(element => {
    selectDepartamentos.innerHTML+=`<option value=${element.id}>${element.nombre}</option>`
});

municipios.forEach(element=>{
    selectMunicipios.innerHTML+=`<option value=${element.id_departamentos}>${element.nombre}</option>`
})