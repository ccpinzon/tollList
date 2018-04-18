require 'mysql2'
require 'rest-client'
require 'json'

client = Mysql2::Client.new(:host => "192.168.33.10", :username => "user" , :password => "123" , :database => "peajes")

results = client.query("SELECT * FROM peaje")

url = 'https://www.datos.gov.co/resource/7fwp-k892.json'
response = RestClient.get(url)
data = JSON.parse(response)

cont = 0
data.each do |peaje|
  results.each do |fila|
  
        if fila["NOMBRE_PEAJE"] == peaje["nombreestacionpeaje"]
           
            if peaje["v"] != "0"
                cont = cont + 1
                precioCat1 =  ["PEAJE: ", peaje["nombreestacionpeaje"] ,", CAT 5 (bd,server) : ", fila["CAT_V"], " <-> ",peaje["v"] ].join
                print precioCat1 , "\n"
            
                query = "UPDATE peaje SET CAT_V =  " << peaje["v"] << " WHERE NOMBRE_PEAJE = '" << fila["NOMBRE_PEAJE"] << "'"
                print "\n", query , "\n"
                #client.query(query)
            end 

        end  

    end

end
puts cont