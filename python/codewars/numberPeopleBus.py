def number(bus_stops):
    inBus = 0
    for x in bus_stops:
        inBus += x[0]
        inBus -= x[1]
    


    return inBus    

        


print(number([[3,0],[9,1],[4,10],[12,2],[6,1],[7,10]]))
