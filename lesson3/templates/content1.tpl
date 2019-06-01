<div>
    {% for json in jsons %}
    <a href="../page.php?id="><img src="{{ json.src }}" alt="{{ json.name }}"></a>
    {% endfor %}
</div>