<div>
        {% for json in jsons %}
    <a href="../page.php?id={{ json.id }}"><img src="{{ json.src }}" alt="{{ json.name }}"></a>
    {% endfor %}
</div>