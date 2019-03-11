export default {
    getTourWithId: (state) =>(id) =>(
  state.tours.find(tour => tour.id === id))
      
}       