<section id="single_product">

    <div>

        <h3>
            {{ $singleserie['title']}}
        </h3>

        <div>
            <p id="price">
                U.S. Price <span>{{ $singleserie['price']}}</span>
            </p>
            <p>
                AVAILABLE
            </p>
        </div>
        
        <p>
            {{ $singleserie['description']}}
        </p>

    </div>

    <img src="{{ $singleserie['thumb'] }}" alt="{{ $singleserie['title'] }}">

</section>

<section id="product_specs">

    <div>
        <h4>
            Specs
        </h4>
        <ul id="specs_list">
            <li>
                Series: {{ $singleserie['series']}}
            </li>
            <li>
                U.S. Price: {{ $singleserie['price']}}
            </li>
            <li>
                On Sale Date: {{ $singleserie['sale_date']}}
            </li>
        </ul>
    </div>
</section>