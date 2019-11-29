def game(s):
    l=[]
    l1=[]
    Kevin=0
    Stuart=0
    vow="AEIOU"
    for i in range(len(s)):
        for j in range(len(s),i,-1):
            k=s[i:j]
            l.append(k)
    

    for i in l:
      if(len(i)!=1):
          l1.append(i)
    #return(l1)
#print(game("vinay"))

    for i in range(len(l1)):
        if(l1[i][0] in  vow):
            Kevin+=1
        else:
            Stuart+=1
    for i in range(len(l)):
        if(len(l[i])==1):
            if(l[i]  in vow):
                Kevin+=1
            else:
                Stuart+=1
    if(Stuart==Kevin):
        print("Draw")
    elif(Stuart>Kevin):
        print("Stuart",Stuart)
    elif(Kevin>Stuart):
        print("Kevin",Kevin)
    #print(Kevin,Stuart)
game("")
        
            

        
