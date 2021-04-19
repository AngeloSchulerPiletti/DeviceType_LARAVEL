# :iphone: What is it?
DeviceType is a simple Middleware for Laravel that defines a constant that select different views 
for mobile devices and for desktop. It just use the <a 
href="https://github.com/jenssegers/agent">Agent library</a> (You don't have to follow 
any instructions of the Agent's README).  <br><br>

## :page_with_curl: Instructions
Before installing something, make sure that your views are divided in:<br>
<ul>
    <li>views/desktop/</li>
    <li>views/mobile/</li>
</ul>

Because when the device were a mobile, a constant called <b>DEVICE_TYPE</b> will save
"desktop/" or "mobile/". Then, this path will be used at your route controller.
Run the following line code at the terminal:

```bash
composer require jenssegers/agent
```

<i>It will install the Agent library at the project. You must had installed the 
<a href="https://getcomposer.org/">composer</a></i>
<br>
<br>

Now, go to ```app/http/Middleware``` and paste the <b>AgentMiddleware.php</b><br>
Then, go to ``` app/http/Kernel.php ``` and search for the 
```php protected $middleware = [] ``` in the Kernel class, and add to the $middleware
the following line:

```
\App\Http\Middleware\AgentMiddleware::class,
```

## :books: How to use it
You should use the middleware at some "RouteController". The AgentMiddleware is 
called at all URL requisitions. So, you already have the ```php DEVICE_TYPE ``` 
defined.<br>
For example, if you want to return the view "home", your ```return view()``` will
be ``` return view(DEVICE_TYPE . "home") ```.<br>

## :books: Other uses
Now that you have all of this structure created, you can use any logical knowledge to
define your own conditional, paths and constants. All of the Agent's methods still
available to be use at the <b>AgentMiddleware</b>.
<br>
<br>

## :pencil2: You can call me for any doubts 

