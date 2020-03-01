@extends('layouts.app')

@section('content')  
<section class="hero is-link is-fullheight-with-navbar">
    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title">
                Колледж твоей мечты
            </p>
        </div>
    </div>
</section>
<section class="hero is-light is-fullheight-with-navbar">
    <div class="level">
        <div class="level-left">
            <div class="container has-text-centered">
                <p class="title"> Как выглядит твой диплом ?</p>    
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore iure id, quasi commodi eveniet placeat. Alias sapiente provident asperiores qui. Enim molestiae eaque, eos ea, ipsam veniam excepturi reiciendis saepe nisi provident quidem iste illum at distinctio labore expedita mollitia velit amet eligendi quisquam! Quam dolore at in, nulla possimus praesentium, quod blanditiis obcaecati fugit, aperiam voluptate deleniti? Perferendis voluptatum voluptate blanditiis nisi ab dignissimos porro impedit voluptas nemo sed voluptatibus maxime optio consequuntur omnis odit excepturi, distinctio fugiat corrupti, eum adipisci repellat quasi sit! Velit dolorum libero suscipit, assumenda quam soluta laboriosam magnam, tempore vero eius ad, molestiae quae!
                </p>
                <button class="button">Подать документы</button>
            </div>            
        </div>
        <div class="level-right">
            <img 
                class="image is-16by9"
                src="https://www.rea.ru/ru/org/branches/erevan/PublishingImages/Pages/%D0%94%D0%B8%D0%BF%D0%BB%D0%BE%D0%BC/%D0%94%D0%B8%D0%BF%D0%BB%D0%BE%D0%BC.png" 
                alt="" 
            >
        </div>
    </div>
</section>
<section class="hero is-link is-medium">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">
                Хочешь знать о наших новостях ?
            </h1>
            <h2 class="subtitle">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, neque.
            </h2>
            <form action="">
                <div class="field is-grouped">
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
                        <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                        </span>
                    </div>
                    <p class="help is-danger">This email is invalid</p>
                    <p class="control">
                        <a class="button is-info">
                            Search
                        </a>
                    </p>
                </div>
            </form>
        </div>
  </div>
</section>
<section class="container is-fullhd">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h2 class="subtitle">
                Контакты
            </h2>
        </div>
        <div class="level">
            <div class="level-lef">
                <form action="">
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                          <input class="input" type="text" placeholder="Text input">
                        </div>
                      </div>
                      
                      <div class="field">
                        <label class="label">Username</label>
                        <div class="control has-icons-left has-icons-right">
                          <input class="input is-success" type="text" placeholder="Text input" value="bulma">
                          <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                          </span>
                          <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                          </span>
                        </div>
                        <p class="help is-success">This username is available</p>
                      </div>
                      
                      <div class="field">
                        <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                          <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
                          <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                          </span>
                          <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle"></i>
                          </span>
                        </div>
                        <p class="help is-danger">This email is invalid</p>
                      </div>
                      
                      <div class="field">
                        <label class="label">Subject</label>
                        <div class="control">
                          <div class="select">
                            <select>
                              <option>Select dropdown</option>
                              <option>With options</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                      <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                          <textarea class="textarea" placeholder="Textarea"></textarea>
                        </div>
                      </div>
                      
                      <div class="field">
                        <div class="control">
                          <label class="checkbox">
                            <input type="checkbox">
                            I agree to the <a href="#">terms and conditions</a>
                          </label>
                        </div>
                      </div>
                      
                      <div class="field">
                        <div class="control">
                          <label class="radio">
                            <input type="radio" name="question">
                            Yes
                          </label>
                          <label class="radio">
                            <input type="radio" name="question">
                            No
                          </label>
                        </div>
                      </div>
                      
                      <div class="field is-grouped">
                        <div class="control">
                          <button class="button is-link">Submit</button>
                        </div>
                        <div class="control">
                          <button class="button is-link is-light">Cancel</button>
                        </div>
                      </div>
                </form>
            </div>
            <div class="level-right">
                <div class="card">
                    <header class="card-header">
                      <p class="card-header-title">
                        Component
                      </p>
                      <a href="#" class="card-header-icon" aria-label="more options">
                        <span class="icon">
                          <i class="fas fa-angle-down" aria-hidden="true"></i>
                        </span>
                      </a>
                    </header>
                    <div class="card-content">
                      <div class="content">
                        Наш адрес
                        <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                        <br>
                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                      </div>
                    </div>
                    <footer class="card-footer">
                      <a href="#" class="card-footer-item">Save</a>
                      <a href="#" class="card-footer-item">Edit</a>
                      <a href="#" class="card-footer-item">Delete</a>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection