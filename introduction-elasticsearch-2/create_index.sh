curl -XDELETE 'localhost:9200/remuneracao?pretty'
curl -XPUT 'localhost:9200/remuneracao'
curl -XPUT 'http://localhost:9200/remuneracao/_mapping/doc?pretty' -H 'Content-Type: application/json' -d '{"properties": {"nome": {"type": "text","fielddata": true}}}'