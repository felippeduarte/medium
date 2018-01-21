curl -XDELETE 'localhost:9200/remuneracao?pretty'
curl -XPUT 'localhost:9200/remuneracao'
curl -XPUT 'localhost:9200/remuneracao/_mapping/remuneracao_type?pretty' -H 'Content-Type: application/json' -d '{"properties": {"nome": {"type": "text","fielddata": true}}}'