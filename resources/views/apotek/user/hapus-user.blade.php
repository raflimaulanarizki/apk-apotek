<form action="{{url('obat/'.$obt->id)}}" method="post">
    @csrf
    @method('DELETE')
 <button type="submit" style="padding: 0; border: none; background: none;" class="cursor-pointer fas fa-trash text-secondary">
 </form>