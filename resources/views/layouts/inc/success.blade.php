<div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            {{ session('success') }}
                        </div>
                    @endif     
                    @if ($errors->any())
                      <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              @foreach ($errors->all() as $error)
                                  <p>{{ $error }}</p>
                              @endforeach
                      </div>
                  @endif  
                </div>