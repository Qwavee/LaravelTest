<template>
  <v-container>
    <v-card>
      <v-card-title>
        <v-text-field
          v-model="search"
          append-icon="mdi-magnify"
          label="Buscar Unidades por Cliente"
          single-line
          hide-details
        ></v-text-field>
      </v-card-title>
      <v-data-table
        :headers="headers"
        :items="desserts"
        :search="search"
        :footer-props="{
           'items-per-page-text' : 'Filas por página',
           'pageText': '{0}-{1} de {2}'
        }"
        no-data-text="No hay datos disponibles"
      ></v-data-table>
    </v-card>
  </v-container>
</template>

<script>
  export default {
    data () {
      return {
        search: '',
        headers: [
          {
            text: 'Cliente',
            align: 'start',
            value: 'cliente.nombre',
            sortable: true,
          },
          { text: 'Código', value: 'codigo', filterable: false, sortable: true},
          { text: 'Tipo', value: 'tipo_ua',filterable: false, sortable: true},
          { text: 'Marca', value: 'marca',filterable: false,sortable: true },
          { text: 'Procesador', value: 'procesador',filterable: false, sortable: true },
          { text: 'Generación', value: 'generacion',filterable: false, sortable: true},
        ],
        desserts: [],
      }
    },
    created(){ 
      fetch('/all')
        .then(response => response.json())
        .then(response => this.desserts= response);
    },
  }
</script>