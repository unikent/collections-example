# collections-example
Demo frontend for Special Collections

This makes vagrant play nicely:
```
/sbin/iptables -t nat -A OUTPUT     --destination collections-example-dev.kent.ac.uk -p tcp --dport 80 -j REDIRECT --to-ports 8080
/sbin/iptables -t nat -A OUTPUT     --destination collections-dev.kent.ac.uk -p tcp --dport 80 -j REDIRECT --to-ports 8080
/sbin/iptables -t nat -A OUTPUT     --destination localhost -p tcp --dport 80 -j REDIRECT --to-ports 8080
/sbin/iptables -t nat -A OUTPUT     --destination 127.0.0.1 -p tcp --dport 80 -j REDIRECT --to-ports 8080
/sbin/iptables -t nat -A PREROUTING --destination 127.0.0.1 -p tcp --dport 80 -j REDIRECT --to-ports 8080
/sbin/iptables --flush PREROUTING -t nat
/sbin/iptables --flush OUTPUT -t nat
```